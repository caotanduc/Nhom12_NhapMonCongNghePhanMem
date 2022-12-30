function selectReceive(radio) {
    // Get the value of the radio button, which contains the period_id, ID, and class_id of the selected row
    var value = radio.value;
    // Split the value into an array containing the individual values
    var values = value.split(",");

  // Execute an AJAX request to retrieve the course details from the database
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    console.log("Course info: " + xhr.responseText);
    if (xhr.readyState == XMLHttpRequest.DONE) {
      // Parse the response and update the course details
      var co =  JSON.parse(xhr.responseText);
      
      document.getElementById("course-receive").value = co.ID + "  -  " + co.name + "  -  " + co.class_name + "  -  " + co.credits + "TC  -  "  + co.day_name + " (" + co.start_period + "-" + co.end_period + ")  -  " + co.room;
    }
  }
  xhr.open("POST", "../../mvc/models/get-course.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("period_id=" + values[0] + "&course_id=" + values[1] + "&class_id=" + values[2]);
  }




  function selectSend(radio) {
    // Get the value of the radio button, which contains the period_id, ID, and class_id of the selected row
    var value = radio.value;
    // Split the value into an array containing the individual values
    var values = value.split(",");

  // Execute an AJAX request to retrieve the course details from the database
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    console.log("Course info: " + xhr.responseText);
    if (xhr.readyState == XMLHttpRequest.DONE) {
      // Parse the response and update the course details
      var co =  JSON.parse(xhr.responseText);
      
      document.getElementById("course-send").value = co.ID + "  -  " + co.name + "  -  " + co.class_name + "  -  " + co.credits + "TC  -  "  + co.day_name + " (" + co.start_period + "-" + co.end_period + ")  -  " + co.room;
    }
  }
  xhr.open("POST", "../../mvc/models/get-course.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("period_id=" + values[0] + "&course_id=" + values[1] + "&class_id=" + values[2]);
  }