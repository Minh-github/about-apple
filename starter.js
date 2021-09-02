

const images = document.querySelectorAll(".iPhone_items ul li");
images.forEach(item => item.addEventListener("click", handleZoomImage));
function handleZoomImage(event){
	console.log(event.target);
	const image = event.target.getAttribute("src");
  const name = event.target.getAttribute("id");
	const template = `
	   <div class="lightbox">
      <div class="lightbox__content">
      <div class="big">
        <div class="imgae">
          <div class="anh">
          <img src="${image}">
          </div>
        </div>
        <div class="more">
          <div class="tieude">${name}</div>
          <div class="mota">
            <li>pin</li>
            <li>man hinh</li>
            <li>chip</li>
            <li>Ram</li>
            <li>camera</li>
          </div>         
        </div>
      </div>
      </div>
      </div>`;

    document.body.insertAdjacentHTML("beforeend",template);
}
document.body.addEventListener("click", function(evon){

  if(evon.target.matches(".lightbox")) {

    evon.target.parentNode.removeChild(evon.target)
  }
});