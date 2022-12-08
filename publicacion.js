const output = document.getElementById('app');
class Blog {
  constructor (body, date, category) {
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
  
  blogs.sort((a, b) => {
    return new Date(b.date) - new Date(a.date);
  }).forEach((blog) => {
    html += 
    `
      <p>${blog.body} </br>
         <b>Publicado:</b> ${blog.date.toLocaleDateString()}, 
         ${blog.date.toLocaleTimeString()}
         imagen subida con id file 
          <img src="https://firebasestorage.googleapis.com/v0/b/your-project-id.appspot.com/o/images%2Ffile?alt=media&token=your-token" alt="file" />
         <b> Minutos transcurridos:</b> ${Math.round((new Date() - new Date(blog.date)) / 60000)}
      </p>

      <hr>
    `
    
  });
  output.innerHTML = html;
  postText.value = "";
}

