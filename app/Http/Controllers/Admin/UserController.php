<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        // dd ('Admin User Controller etc.');
        return view('admin.users.index');
    }

    public function list(Request $request)
    {
        try {
            $totalData = User::count();
            // dd($totalData);
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            $order = $request->input('columns.' . $request->input('order.0.column') . '.data');
            $dir = $request->input('order.0.dir');
            if (empty($request->input('search.value'))) {
                $results = User::offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            } else {
                $search = $request->input('search.value');

                $results = User::search($search)
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
                $totalFiltered = User::search($search)
                    ->count();
            }

            $data = array();
            if (!empty($results)) {
                foreach ($results as $row) {
                    $nestedData['name'] = view(
                        'admin.users._table_user_info',
                        [
                            'user' => $row
                        ]
                    )->render();
                    $nestedData['status'] = view(
                        'admin.users.._table_status',
                        [
                            'user' => $row
                        ]
                    )->render();
                    $nestedData['zip_code'] = $row->address;
                    $nestedData['created_at'] = $row->joined_at;
                    $nestedData['_table_user_actions'] = view(
                        'admin.users._table_user_actions',
                        [
                            'user' => $row
                        ]
                    )->render();

                    $data[] = $nestedData;
                }
            }

            $json_data = array(
                "draw"            => intval($request->input('draw')),
                "recordsTotal"    => intval($totalData),
                "recordsFiltered" => intval($totalFiltered),
                "data"            => $data
            );
            echo json_encode($json_data);
        } catch (\Throwable $th) {
            throw $th;
            return Response::json(['error' => $th->getMessage()], 500);
        } catch (\Exception $e) {
            throw $e;
            return Response::json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            return view('admin.users.show', compact('user'));
        }
        abort(404);
    }

    public function remove(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        if ($user) {
            $user->delete();
            Alert::success('Success', 'User has been deleted successfully');
            return redirect()->route('admin.users.index');
        }

        Alert::error('Error', 'User not found');
        return redirect()->route('admin.users.index');
    }
}
