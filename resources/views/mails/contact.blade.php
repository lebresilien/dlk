
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body style="background: #e5e5e5; padding: 30px;" >

        <div style="max-width: 700px; margin: 0 auto; padding: 20px; background: #fff;">
                
            <h3>Prise de contact</h3>

            <p>Nom: <b>{{ $data['subject'] ? $data['subject'] : 'pas de nom' }}</b></p>

            <p>Email: <b>{{ $data['email'] }}</b></p>

            <p>Téléphone: <b>{{ $data['phone'] ? $data['phone'] : '' }}</b></p> 

            <p>Object: <b>{{ $data['subject'] }}</b></p>

            <p>Message: <b>{{ $data['message'] }}</b></p>

        </div>

    </body>
</html>