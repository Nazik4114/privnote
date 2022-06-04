//console.log(document.getElementById("note_raw").value);
let f=document.getElementById("forma")
if(undefined!=f)
{
document.getElementById("forma").addEventListener("submit",e=>{
    let text1=document.getElementById("note_raw").value;
    if(text1.length==0||text1.length>=1000){
        document.getElementById("err").className="";
           console.log(text1);
        e.preventDefault();
    }

});
}