<?php

namespace App\Http\Controllers;

use App\Exceptions\EmailExistException;
use App\Helpers\MessageHelper;
use App\Http\Requests\ContactRequest;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index() {
        $contacts = Contact::all();
        return view("contact.index", compact("contacts"));
    }

    public function novo() {
        return view("contact.novo");
    }

    public function salvar(ContactRequest $request) {
        try {
            $newContact = $request->validated();
            (new Contact())->salvar($newContact);

            $request->session()->flash("message.success", MessageHelper::getMessage("save.success"));
            return \redirect("/contacts");
        } catch(EmailExistException $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }

    }

    public function delete($id, Request $request) {
        Contact::where('id', $id)->delete();
        $request->session()->flash("message.success", MessageHelper::getMessage("delete.success"));
        return \redirect("/contacts");
    }

    public function editar($id) {
        $contact = Contact::find($id);
        return view("contact.edit", compact("contact"));
    }

    public function update(ContactRequest $request, $id) {
        $contactModified = $request->validated();
        (new Contact)->atualizar($id, $contactModified);

        $request->session()->flash("message.success", MessageHelper::getMessage("edit.success"));
        return \redirect("/contacts");
    }


}
