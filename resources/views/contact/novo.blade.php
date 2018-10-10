@component('layout')
    <br/>
    <h1 class="text-center">New Contact</h1>

    <div class="row">

        @include("elements.messageValidation")

        <form class="col-md-12" action="{{ route("contact.novo") }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name*:</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>

            <div class="form-group">
                <label for="email">Email*:</label>
                <input type="email" name="email" id="email" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="cellphone">Cellphone*:</label>
                <input type="tel" name="cellphone" id="cellphone" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="skype">Skype:</label>
                <input type="text" name="skype" id="skype" class="form-control"/>
            </div>


            <div class="form-group">
                <label for="facebook">Facebook:</label>
                <input type="text" name="facebook" id="facebook" class="form-control"/>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Gravar" />
            </div>

        </form>
    </div>
@endcomponent