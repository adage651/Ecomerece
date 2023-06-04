let img='3000.jpg'
let review="hello hallo hallo"
let itemId=8;
let reviwer=28;
let reviewDate=date();
let xml=XMLHttpRequest();

xml.open('post',`../controller/userController.php?addReview`,true);
xhr.setRequestHeader('Content-Type', 'application/json');
let data ={
    reviwer:reviwer,
     itemId:itemId,
      review:review,
       rank:count,
        reviewDate:reviewDate
}
dataJson=Json.stringfy(data);
xml.send(dataJson);