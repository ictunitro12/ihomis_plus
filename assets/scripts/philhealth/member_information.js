//$(document).ready(function () {
//const baseURI = $("#base_url").val();

function MemberInfo(phicnum) {
  var obj;
  $.ajax({
    type: "POST",
    /*url: baseURL + "Philhealth/MemberInformation/" + phicnum,*/
    url: baseURL + "Philhealth/MemberInformation",
    data: { phicnum: phicnum },
    async: false,
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      toastr.error("Error: Fetching Patient Information!", "Error");
      //alert("Error: Fetching Member Information!");
    },
  });
  return obj;
}

function MemberInformation(phicnum) {
  $.ajax({
    type: "POST",
    /*url: baseURL + "Philhealth/MemberInformation/" + phicnum,*/
    url: baseURL + "Philhealth/MemberInformation",
    data: { phicnum: phicnum },
    async: false,
    success: function (data) {
      var obj = $.parseJSON(data);
      var memhpercode = obj["hpercode"];
      $("#memhpercode").val(memhpercode);
      var phicnum = obj["phicnum"];
      $("#pin").val(phicnum);
      var typemem = obj["typemem"];
      var typedesc = obj["typedesc"];
      var newOption = new Option(typedesc, typemem, true, true);
      $("#typemem").append(newOption).trigger("change");

      if (typemem == "01" || typemem == "02") {
        $("#pen").prop("disabled", false);
        $("#employer").prop("disabled", false);
        $("#empStr").prop("disabled", false);
        $("#empCity").prop("disabled", false);
        $("#empcontactno").prop("disabled", false);
      } else {
        $("#pen").prop("disabled", true);
        $("#employer").prop("disabled", true);
      }

      var phicnum2 = obj["phicnum2"];
      $("#pen").val(phicnum2);
      var empname = obj["empname"];
      $("#employer").val(empname);
      var memlast = obj["memlast"];
      $("#memlast").val(memlast);
      var memfirst = obj["memfirst"];
      $("#memfirst").val(memfirst);
      var memmid = obj["memmid"];
      $("#memmiddle").val(memmid);
      var memsuffix = obj["memsuffix"];
      $("#memsuffix").val(memsuffix);
      var memsex = obj["memsex"];
      $("#memsex").val(memsex);
      var membdate = obj["membdate"];
      $("#membdate").val(
        $.datepicker.formatDate("yy-mm-dd", new Date(membdate))
      );
      var memcivil = obj["memcivil"];
      $("#memcstat").val(memcivil);
      var memstr = obj["memstr"];
      $("#memstr").val(memstr);

      var memREg = obj["memregcode"];
      var memregname = obj["memregname"];
      var newOption = new Option(memregname, memREg, true, true);
      $("#memReg").append(newOption).trigger("change");
      setMemRegion("mem",memREg);

      var memprov = obj["memprov"];
      var memprovname = obj["memprovname"];
      var newOption = new Option(memprovname, memprov, true, true);
      $("#memProv").append(newOption).trigger("change");
      setMemProv("mem",memREg);
      $("#memProv").prop("disabled", false);

      var memcity = obj["memcity"];
      var memcityname = obj["memcityname"];
      var newOption = new Option(memcityname, memcity, true, true);
      $("#memCity").append(newOption).trigger("change");
      setMemCity( "mem",memprov);
      //City(memprov, "mem");
      $("#memCity").prop("disabled", false);

      var memzip = obj["memzip"];
      $("#memZip").val(memzip);
      var memdistzip = obj["distzip"];
      var memdistname = obj["memdistname"];
      if (memdistzip != null && memdistzip != "") {
        var newOption = new Option(memdistname, memdistzip, true, true);
        $("#memDist").append(newOption).trigger("change");
        $("#memDist").prop("disabled", false);
      }
      setMemZipCode("mem",memcity);
      //District(memcity, "mem");

      var membrgy = obj["membrgy"];
      var membrgyname = obj["membrgyname"];
      var newOption = new Option(membrgyname, membrgy, true, true);
      MemBarangay("mem",memcity);
      setMemBrgy("mem",memcity);
      $("#memBrgy").append(newOption).trigger("change");
      
      //function MemBarangay(type,citycode)
      //Barangay(memcity, "mem");
      $("#memBrgy").prop("disabled", false);

      var memctry = obj["memctry"];
      $("#memCountry").val(memctry);

      var pemailaddress = obj["pemailaddress"];
      $("#mememail").val(pemailaddress);
      var memcontactno = obj["memcontactno"];
      $("#memContactNo").val(memcontactno);

      var memlandline = obj["memlandline"];
      $("#memContactNoLandLine").val(memlandline);

      var empcontactno = obj["empcontactno"];
      $("#empcontactno").val(empcontactno);

      if (memcivil == "M") {
        var splast = obj["splast"];
        $("#memspouselastname").val(splast);
        $("#memspouselastname").prop("disabled", false);
        var spfirst = obj["spfirst"];
        $("#memspousefirstname").val(spfirst);
        $("#memspousefirstname").prop("disabled", false);
        var spmid = obj["spmid"];
        $("#memspousemiddlename").val(spmid);
        $("#memspousemiddlename").prop("disabled", false);
        var spsuffix = obj["spsuffix"];
        $("#memspousesuffix").val(spsuffix);
        $("#memspousesuffix").prop("disabled", false);
      }
      var empstr = obj["empstr"];
      $("#empStr").val(empstr);

      var empreg = obj["empregcode"];
      var empregname = obj["empregname"];
      if (empreg != null && empreg != "") {
        var newOption = new Option(empregname, empreg, true, true);
        $("#empReg").append(newOption).trigger("change");
      }
      setMemRegion("emp",empreg);
      //Region("emp");

      var empprov = obj["empprov"];
      var empprovname = obj["empprovname"];
      if (empprov != null && empprov != "") {
        var newOption = new Option(empprovname, empprov, true, true);
        $("#empProv").append(newOption).trigger("change");
        $("#empProv").prop("disabled", false);
      }
      setMemProv("emp",empreg);
      //Province(empreg, "emp");

      var empcity = obj["empcity"];
      var empcityname = obj["empcityname"];
      if (empcity != null && empcity != "") {
        var newOption = new Option(empcityname, empcity, true, true);
        $("#empCity").append(newOption).trigger("change");
        $("#empCity").prop("disabled", false);
      }
      setMemCity("emp",empprov);
      //City(empprov, "emp");

      var empbrgy = obj["empbrgy"];
      var empbrgyname = obj["empbrgyname"];
      if (empbrgy != null && empbrgy != "") {
        var newOption = new Option(empbrgyname, empbrgy, true, true);
        MemBarangay("emp",empcity);
        setMemBrgy("emp",empcity);
        $("#empBrgy").append(newOption).trigger("change");
        $("#empBrgy").prop("disabled", false);
      }
      setMemBrgy(empcity, "emp");
      //Barangay(empcity, "emp");

      var empzip = obj["empzip"];
      $("empZip").val(empzip);
      var empdistzip = obj["empdistzip"];
      var empdistname = obj["empdistname"];
      if (empdistzip != null && empdistzip != "") {
        var newOption = new Option(empdistname, empdistzip, true, true);
        $("#empDist").append(newOption).trigger("change");
        $("#empDist").prop("disabled", false);
      }
      setMemZipCode("emp",empcity);
      //District(empcity, "emp");

      var empctry = obj["empctry"];
      $("#empcountry").val(empctry);
    },
    error: function (response) {
      toastr.error("Error: Fetching Patient Information!", "Error");
      //alert("Error: Fetching Patient Information!");
    },
  });
}

function civilstatus(param) {
  switch (param) {
    case "C":
      return "Child";
      break;
    case "S":
      return "Single";
      break;
    case "M":
      return "Married";
      break;
    case "D":
      return "Divorced";
      break;
    case "X":
      return "Separated";
      break;
    case "W":
      return "Widower/Widow";
      break;
    default:
      return "N/A";
  }
}

function sex(param) {
  var sex;
  if ($.trim(param) == "M") {
    sex = "Male";
    return sex;
  } else if ($.trim(param) == "F") {
    sex = "Female";
    return sex;
  } else {
    sex = "N/A";
    return sex;
  }
}
//});
