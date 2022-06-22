// for getting the data


// once the document has loaded load all the data from the database
// and append to the table body in the form of table rows

function getData()
{
    alert("it is working");
    var xml = new XMLHttpRequest();

    xml.onload = function () {
      const resp = JSON.parse(this.responseText);

      if(resp)
      {
        alert(resp[0].id);
      }
  
      $.each(resp, function () {
        $("#tbody").append(
          `
      <tr>
      <li>${this["id"]}</li>
      <li>${this["medName"]}</li>
      <li>${this["medCode"]}</li>
      <li>${this["medQ"]}</li>
      <li>${this["medDesc"]}</li>
      <li>${this["medTake"]}</li>
      <li>${this["medDosage"]}</li>
      <li>${this["medPrice"]}</li>
      <li>${this["medType"]}</li>
      </tr>
      `
        );
      });
      xml.open("GET" , "fetchMed.php", true);
      xml.send();
    };
}



// to add data to the Database 

function addMedicine()
{
    alert("add medicine is working");
        var mdName = $("#mn").val();
        var mdCode = $("#mc").val();
        var mdQnty = $("#mq").val();
        var mdDesc = $("#md").val();
        var whenToTake = $("#wtt").val();
        var mdDosage = $("#sd").val();
        var mdPrice = $("#mp").val();
        var mdType = $("#mdType").val();

        alert(mdQnty);

        var xml = new XMLHttpRequest();

        xml.onload = function()
        {
            var resp = this.responseText.toString();
            console.log(resp); // to show the response in the console tab.

            if(resp == "Medicine Added to the Table")
            {
                alert("medicine has been addded");
                getData();
            }
            else
            {
                alert(resp);
            }
            
            
        };

        xml.open("POST" , "addMed.php?" , true);

        xml.setRequestHeader("Content-Type" , "application/x-www-form-urlencoded");

        xml.send("medicineName="+mdName+ "&medicineCode="+mdCode+ "&medicineQuantity="+mdQnty+ "&medicineDescription="+mdDesc+"&whenToTake="+whenToTake+ "&medicineDosage="+mdDosage+ "&medicinePrice="+mdPrice+ "&medicineType="+mdType);



}


// to delete data from the table

function delMedicine()
{
  alert("delete medicine function works");


  var index = $("#index").val();
  var medicine = $("#medType").val();

  alert(index);
  alert(medicine);

  var xml = new XMLHttpRequest();

  xml.onload = function(){

    var resp = this.responseText.toString();
    console.log(resp); // to show the response in the console tab.

    if(resp == "Medicine Deleted")
    {
        alert("Medicine has been deleted");
        getData();
    }
    else
    {
        alert(resp);
    }
    

  };

  xml.open("post" , "deleteMedicine.php?", true);
  xml.setRequestHeader("Content-Type" , "application/x-www-form-urlencoded");
  xml.send("index="+index+"&medType="+medicine);
  
}



function updateMed()
{
  alert("the update medicine () function is working");
  var id = $('#ID').val();
  var mdName = $("#mn").val();
  var mdCode = $("#mc").val();
  var mdQnty = $("#mq").val();
  var mdDesc = $("#md").val();
  var whenToTake = $("#wtt").val();
  var mdDosage = $("#sd").val();
  var mdPrice = $("#mp").val();
  var mdType = $("#mdType").val();

  var xml = new XMLHttpRequest();

  xml.onload = function(){

    var resp = this.responseText.toString();

    
    if(resp == "Medicine has been updated in the Table")
    {
        alert("Medicine has been updated");
        getData();
    }
    else
    {
        alert(resp);
    }

  };

  xml.open("POST" , "updMed.php" , true);
  xml.setRequestHeader("Content-Type" , "application/x-www-form-urlencoded");

        xml.send("id="+id+"&medicineName="+mdName+ "&medicineCode="+mdCode+ "&medicineQuantity="+mdQnty+ "&medicineDescription="+mdDesc+"&whenToTake="+whenToTake+ "&medicineDosage="+mdDosage+ "&medicinePrice="+mdPrice+ "&medicineType="+mdType);

}

  

// the function for loggin based on the users in the database table

function login()
{
  alert("the login function is working");
  var user = $('#userN').val();
  var pass = $('#passW').val();
  alert(user);

  var xml = new XMLHttpRequest();

  xml.onload = function(){

    var resp = this.responseText.toString();

    if(resp == "match has been found")
    {
      window.location.href = "index.html";
    }
    else
    {
      alert("you are clear to proceed");
      window.location.href = "home.html";
    }

  };

  xml.open("POST" , "login.php?" , true);
  xml.setRequestHeader("Content-Type" , "application/x-www-form-urlencoded");
  xml.send("userName="+user+"&passWord="+pass);

}


