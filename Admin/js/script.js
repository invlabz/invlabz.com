$(document).ready(function()
{
    $(".admin-login").click(function()
    {
        var username = $(".username").val();
        var password = $(".password").val();
        var data = "username="+username+"&password="+password;
        $.ajax(
            {
                url:"data.php",
                type:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                    if(data == 0)
                    {
                        alert("invalid Credentials");
                    }
                    else
                    {
                        window.location.href="dashboard.php";
                    }
                }
            }
        )
    })



    $(".updateplan").click(function()
    {
        var plan_id = $(this).attr('id');
        var selling_price = $("."+"selling_"+plan_id).val();
        var discount = $("."+"discount_"+plan_id).val();
        var data = "id="+plan_id+"&selling_price="+selling_price+"&discount="+discount;
        $.ajax(
            {
                url:"data.php",
                type:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                  alert(data);
                }
            }
        )
    })






})