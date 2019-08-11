var i=1;
var j=1;
var sum = 0;
function create_form(){
    var y = document.createElement("input");
    var x = document.createElement("input");
    var z = document.createElement("br");
    y.setAttribute("type","text");
    y.setAttribute("class","newfield");
    x.setAttribute("type","number");
    x.setAttribute("class","newfield");
    y.setAttribute("Placeholder","Item_"+i);
    x.setAttribute("Placeholder","Cost_"+i);
    y.setAttribute("Name","Item[]");
    x.setAttribute("Name","Cost[]");
    document.getElementById("myForm").append(i);
    document.getElementById("myForm").appendChild(y);
    document.getElementById("myForm").append("---");
    document.getElementById("myForm").appendChild(x);
    document.getElementById("myForm").appendChild(z);
    i++;
}
function deleteMe(delid){
    if(confirm("Do you want to delete?")){
        window.location.href='delete.php?del_id=' +delid+'';
        return true;
    }
}


function sumIt() {
  var total = 0, val;
  $('.Cost').each(function() {
    val = $(this).val();
    val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
    total += val;
  });
  $('#total_price').html(Math.round(total));
  $('#total_amount').val(Math.round(total));
}

$(function() {
  $("#add").on("click", function() {
    $("#container input").last()
      .before($("<input />").prop("class","Cost").val(0))
      .before("<br/>");
    sumIt();  
  });


  $(document).on('input', '.Cost', sumIt);
  sumIt() // run when loading
});
