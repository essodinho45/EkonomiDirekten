<div>
    <h5>
        email was recieved from {{ $data['name'] }}
        <br>
        <b>subject: </b> {{ $data['subject'] }}
    </h5>
    <hr>
    <p>
        {{ $data['message'] }}
    </p>
    <hr>
    <b>Sender's email: </b> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
    @if ($data['mobile'])
        <br>
        <b>Sender's mobile: </b> <a href="phone:{{ $data['mobile'] }}">{{ $data['mobile'] }}</a>
    @endif
</div>
