<title>與我聯繫</title>
<!-- 一開始即執行javascript的 init() function -->
<body onload="init()"><body style="background-color:powderblue;">
 <form   enctype="text/plain" accept-charset="utf-8">
    <!-- 寄件者姓名    -->
     <input id="nameText" type="text" name="Name"  value size="80" placeholder="姓名(name)" required><br>  <!-- required 必填欄位 ，placeholder 預設內容--> 
     
     <!-- 寄件者email -->
     <input id="emailText" type="email" name="Email"  value size="80" placeholder="Email" required><br>
     
     <!-- 寄件者電話 -->
     <input id="telText"type="tel" name="Phone"  value size="80" aria-invalid="false" placeholder="電話(phone)" required><br>
     
     <!-- 郵件主旨 -->
     <input  id="subText" type="text" name="Subject"  value size="80" aria-invalid="false" placeholder="主旨(subject)" required><br>
             
     <!-- 郵件內容 -->
     <textarea id="bodyText" name="your-message" cols="60" rows="20"  aria-required="true" aria-invalid="false" placeholder="你的訊息(Your Message)" required></textarea>
     
     <!-- 傳送按鈕 -->
     <div>
         <input type="button" value="送出訊息" onclick="submitHandler();">
         <a id="mailTo"></a>
     </div>
 </form>
</body>

<script>
//宣告預設表單內容為空 （你想要的話也可以加東西）
    var initSubject='',initBody='';
 
    //按下傳送按鈕後執行
    function submitHandler(){
        var to = "e1074181038@gm.lhu.edu.tw";//傳送至的mail
        var name = nameText.value;
        var email = emailText.value;
        var tel = telText.value;
        var subject = subText.value;
//把user填的資料都塞到 mail body 中
        var body = ""+bodyText.value+'%0A%0A%0A';//%0A是換行 換了三行
            body += "From："+nameText.value+'%0A';
            body += "Email："+emailText.value+'%0A';
            body += "Tel："+telText.value;
//傳送的主要程式碼
        mailTo.href="mailto:"+to+"?subject="+subject+"&body="+body;
        mailTo.click();
    }
//在body onload
    function init(){
        subText.value=initSubject;
        toText.value=initTo;
        bodyText.value=initBody;
    }
</script>