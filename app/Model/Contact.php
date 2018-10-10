<?php

namespace App\Model;

use App\Exceptions\EmailExistException;
use App\Helpers\MessageHelper;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = ["name", "email", "skype", "facebook", "cellphone"];

    private function getContactWithEmail($email) {
        return Contact::where("email", $email);
    }

    public function salvar(array $newContact) {
        $email = Contact::getContactWithEmail($newContact["email"]);

        if ($email) {
            throw new EmailExistException(MessageHelper::getMessage("EMAIL_JA_EXISTE"));
        }

        Contact::create($newContact);
    }

    public function atualizar($id, array $contactModified) {
        $contact = Contact::find($id);
        $contact["name"] = $contactModified["name"] ?? null;
        $contact["email"] = $contactModified["email"] ?? null;
        $contact["skype"] = $contactModified["skype"] ?? null;
        $contact["facebook"] = $contactModified["facebook"] ?? null;
        $contact["cellphone"] = $contactModified["cellphone"] ?? null;
        $contact->save();
    }

}
