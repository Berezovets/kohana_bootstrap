$(document).ready(function(){
            $("#sendAjax").click(function(){ // при нажатии кнопки добавления новой статьи
                $("#sendAjax").attr('disabled','disabled'); // делаем кнопку недоступной, чтобы избежать повторных нажатий
                $("#error").slideUp('slow'); // убираем блок с ошибкой, если он был
                $("#loading").slideDown('slow'); // показываем индикатор загрузки
                var first_name = $('#first_name').val(); // берем имя и т д
                var last_name = $('#last_name').val(); 
                var email = $('#email').val(); 
                var adress = $('#adress').val(); 
                var city = $('#city').val(); 
                var country = $('#country').val(); 
                var id = $('#id').val(); 
                $.ajax({ // описываем наш запрос
                        type: "POST", // будем передавать данные через POST
                        dataType: "json", // указываем, что нам вернется JSON
                        url: "/ajax/delarticle", // запрос отправляем на контроллер Ajax метод addarticle
                        data: "first_name="+first_name+"&last_name="+last_name+"&email="+email+"&adress="+adress+"&city="+city+"&country="+country+"&id="+id,
                        success: function(response) { 
                            if (response.code == 'error') 
                            {
                                $("#error").slideDown('slow'); 
                            }
                            if (response.code == 'success') 
                            {
                                $("#table").load('/ajax/getarticles'); 
                            }
                            $("#sendAjax").removeAttr('disabled');
                            $("#loading").slideUp('slow'); 
                        }
                });
            });
        });

