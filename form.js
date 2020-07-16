$('#form').submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: 'form.php',
        data: $('#form').serialize(),
        success: function(data) {
            alert('Thank You!, Message received', `${data}`)
        },
        error: function() {
            alert('Oops! an error occured')
        },
        complete:function(){
            $('#form').each(function(){
                this.reset(); 
            });
       }
    })
})
