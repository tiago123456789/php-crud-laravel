@component('layout')
    <br/>
    <h1 class="text-center">Contacts</h1>

    <a href="{{route("contact.novo")}}" class="btn btn-primary">
        <i class="fa fa-save "></i> &nbsp;Novo
    </a>
    <br/>
    <br/>
       @include("elements.messageNotification")
    <div class="row">
        @foreach($contacts as $contact)
            <div class="col-md-4" style="margin-bottom: 5px;">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <i class="fa fa-user fa-lg"></i> &nbsp; {{$contact->name}}<br/>
                            <i class="fa fa-envelope fa-lg"></i> &nbsp; {{$contact->email}}<br/>
                            <i class="fa fa-mobile fa-lg"></i> {{$contact->cellphone}}<br/>
                            @if(isset($contact["skype"])) <i class="fa fa-skype  fa-lg"></i> {{$contact->skype}} @endif<br/>
                            @if(isset($contact["facebook"])) <i class="fa fa-facebook fa-lg" ></i> {{$contact->facebook}} @endif<br/>
                        </p>

                        <div>
                            <a href="{{ route("contact.edit", $contact["id"]) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil fa-lg"></i>
                            </a>
                            <a href="{{ route("contact.delete", $contact["id"]) }}" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endcomponent