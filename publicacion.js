const categoria = document.getElementById('tipo_categoria').value;
const img = document.getElementById('img').value;
const output = document.getElementById('app');

class Blog {
  constructor (body, date) {
    this.body = body;
    this.date = date;
  }
  
}

let blogs = [];
function returnPost() {
  const postText = document.getElementById("blogText");
  blogs.push(new Blog(postText.value, new Date()));
  output.innerHTML = '';
  let html ='';  

  if(postText.value == '') {
    alert('No se puede publicar un post vacio');
    return;
  }
  
  blogs.sort((a, b) => {
    return new Date(b.date) - new Date(a.date);
  }).forEach((blog) => {
    html += 
    `
     <center>
     <table border=2 style="background-color: orangered; width:400px;">
     <tr>
       <td>
       <div style="background-color: yellow;">
       <b>Categoria:</b> ${categoria} </br>
       </div>
       <p>${blog.body} </br>
        <img src="${img}" width="100" height="100">
       </p>
       <div style="background-color: orange;">
       <b>Publicado:</b> ${blog.date.toLocaleDateString()}<br>
       <b>Hora: </b>${blog.date.toLocaleTimeString()}
       </div>
       </td>
     </tr>
   </table>
    </center>
    `
  });
  output.innerHTML = html;
  postText.value = "";
}


