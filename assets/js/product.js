fetch ("http://localhost/tiendamvc/api/categories")
.then(data=>data.json())
.then(datos=>{
   datos.forEach(element => {
        let option=document.createElement("option");
        option.value=element.category_id;
        option.textContent=element.name;
        document.getElementById("category").appendChild(option);
   });
})
.catch(err=>{
    console.log(err);
})