   $(document).ready(function() {
    let count = 0;
    let func=()=> {
        
        document.querySelectorAll('.review_star').forEach((element, index) => {
          element.addEventListener('mouseenter', () => {
            if (element.style.fill!= 'rgb(212, 160, 29)') {
              count++;
              element.style.fill = 'rgb(212, 160, 29)';
            } else {
              count--;
              element.style.fill = '#999';
            }
          });
        });
      }
      func();
document.querySelector('.review_btn').addEventListener('click',()=>{


let img=document.querySelector('.write_review img').getAttribute('src');
let review=document.querySelector('.write_review input').value;
let itemId=window.location.href.replace('http://localhost/Ecomerece/views/review.php?id=','');
let reviwer=document.querySelector('.id').value;
let xml=new XMLHttpRequest();
let reviewDate=new Date();
xml.open('post',`../controller/random.php`,true);
xml.setRequestHeader('Content-Type', 'application/json');
let data ={
    reviwer:reviwer,
     itemId:itemId,
      review:review,
       rank:count,
        reviewDate:reviewDate
}
dataJson=JSON.stringify(data);
xml.send(dataJson);
window.location.reload();
})
 
function togglePanel() {
  const optionsPanel = document.querySelector('.options-list');
  optionsPanel.classList.toggle('show');
}










});