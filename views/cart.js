let remove=(id,user_id)=>{
    xml=new XMLHttpRequest();
    xml.open('delete','../controller/cartController.php');
let data=[id,user_id];
let jsonData=JSON.stringify(data);
    xml.send(jsonData);
    window.location.reload();
}
let checkout=(id,user_id)=>{
    xml=new XMLHttpRequest();
    xml.open('post','../controller/orderController.php');
let data=[id,user_id];
let jsonData=JSON.stringify(data);
    xml.send(jsonData);
    window.location.reload();
}
let alert = document.querySelector('.alert');
let alertMessage = document.querySelector('.alert-message');
let alertTitle = document.querySelector('.alert-title');

function showAlert(type, title, message) {
  alertTitle.textContent = title;
  alertMessage.textContent = message;
  alert.classList.add(`alert-${type}`);
  alert.style.display = 'block';
}

function closeAlert() {
  alert.classList.remove('alert-success', 'alert-info', 'alert-warning', 'alert-danger');
  alert.style.display = 'none';
}
