    function sendOtp() {
       let phone= document.querySelector('#phone').value;
       let phone= document.querySelector('#email').value;
       let phone= document.querySelector('#name').value;
       let phone= document.querySelector('#course').value;

        console.log(phone)
        $.ajax({

            url: "{{ route('getstart.getotp',) }}",
            data: {
                'data': mobileNumber
            },
            type: 'GET',
            success: function (result) {
                $('#data').html('Otp Successfully send to the mobile number');
            }
        });
    }
