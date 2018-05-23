   $('#splash').ready() 
            {
                $('#main').load('dashboard.html');
                setTimeout(function() {
                    $('#main').ready(function() {
                        $('#splash').remove();
                        window.location.href = "dashboard.html";
                    });
                }, 2000);
            }