  
        $(".signUp").on("click", function () {
          alert("sign up button is working");

          var fname = $("#fn").val();
          var lname = $("#ln").val();
          var employeeID = $("#emp_id").val();
          var userName = $("#us").val();
          var passWord = $("#ps").val();
  

          var xml = new XMLHttpRequest();

          xml.onload = function () {
            var resp = this.responseText.toString();

            if (resp == "account created and inserted into the database") {
              alert("account has been created");
            } else {
              alert("account created for some reason although the response is not what we hoped for");
            }
          };

          xml.open("POST", "createProfile.php?" , true);
          xml.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
          );

          xml.send(
            "firstName=" +
              fname +
              "&lastName=" +
              lname +
              "&empID=" +
              employeeID +
              "&user=" +
              userName +
              "&pass=" +
              passWord
          );

          alert("the account has been created and you shall be redirected to Index page for login");
          window.location.href = "index.html";
        });