export default function t(t){if(!/^[0-9]{11}$/.test(t)){return{meta:{},valid:false}}let e=0;const a=t.length;const r=[1,3,7,9,1,3,7,9,1,3,7];for(let n=0;n<a-1;n++){e+=r[n]*parseInt(t.charAt(n),10)}e=e%10;if(e===0){e=10}e=10-e;return{meta:{},valid:`${e}`===t.charAt(a-1)}}