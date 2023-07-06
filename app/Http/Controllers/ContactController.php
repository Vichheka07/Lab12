<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    //method index
    public function index(){
        $contacts = Contact::where(function ($query) {
            if ($companyId = request()->query("company_id")) {
            $query->where("company_id", $companyId);
            }
            })->where(function ($query) {
                if ($search = request()->query('search')) {
                $query->where("first_name", "LIKE", "%{$search}%");
                $query->orWhere("last_name", "LIKE", "%{$search}%");
                $query->orWhere("email", "LIKE", "%{$search}%");
                }
                })->orderby('id','desc')->paginate(10);
        $companies =json_decode(json_encode($this-> getCompanies()));
        return view('contacts.index',['contacts'=>$contacts,'companies' =>$companies]);
    }
    //method create
    public function create(){
        $companies = Company::pluck('name', 'id');
        return view('contacts.create',compact('companies'));
    }
    public function show($id){
        $contact = Contact::find($id);
        return view('contacts.show')->with('contactes',$contact);
    }
    protected function getCompanies(){
        $data = [];
        Company::select('id','name')->orderby('name',)->get();
        $companies = Company::select('id','name')->orderby('name','asc')->get();
        foreach($companies as $company){
            $data[$company->id] = $company->name."(". $company->contacts()->count() .")";
        }
        return $data;
    }
    public function store(Request $request){
        $request->validate([
        'first_name' => 'required|string|max:50',
        'last_name' => 'required|string|max:50',
        'email' => 'required|email',
        'phone' => 'nullable',
        'address' => 'nullable',
        'company_id' => 'required|exists:companies,id'
    ]);
    Contact::create($request->all());
    $message = "Contact has been added successfully";
    return redirect()->route('vichheka.contacts.index')->with('message', $message);
    }
    public function edit($id){
        $companies = Company::pluck('name','id');
        $contact = Contact::findOrFail($id);
        return view('contacts.edit',compact('companies','contact'));
    }
    public function update(Request $request, $id){
        $contact = Contact::findOrFail($id);
        $request -> validate([
        'first_name' => 'required|string|max:50',
        'last_name' => 'required|string|max:50',
        'email' => 'required|email',
        'phone' => 'nullable',
        'address' => 'nullable',
        'company_id' => 'required|exists:companies,id'
        ]);
        $contact->update($request->all());
        $message = "Contact has been updated successfully";
        return redirect()->route('vichheka.contacts.index')->with('message',$message);
    }
    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('vichheka.contacts.index')->with('message','Contact has been removed successfully');   
    }
}
