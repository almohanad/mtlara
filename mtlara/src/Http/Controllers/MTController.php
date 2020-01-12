<?php
    // MyVendor\Contactform\src\Http\Controllers\ContactFormController.php
    namespace MT\mtlara\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use MT\mtlara\Models\Test;

    class MTController extends Controller {

        public function index()
        {
           return view('mtviews::test');
        }

        public function sendMail(Request $request)
        {
            Test::create($request->all());

            return redirect(route('test'));
        }


    }