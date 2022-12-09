<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\StartInspectionResource;
use App\Http\Resources\API\TemplateResource;
use App\Http\Resources\CreateInspectionResource;
use App\Http\Resources\HandOver as ResourcesHandOver;
use App\Http\Resources\OneHandOver;
use App\Models\Document;
use App\Models\HandOver;
use App\Models\NewTemplate;
use PDF2;
use PDF;
use App\Models\VisitType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;
use App\Http\Traits\MessageTrait;

class AppApiController extends Controller
{
    use MessageTrait;

    public function test_create_template()
    {
        return view('NewPages.template.create');
    }

    // public function form(Request $request)
    // {
    //     // $pdf = PDF2::chunkLoadView('<html-separator/>', 'pdf.newpdf');
    //     // return $pdf->stream('Report.pdf');

    //     //see the field form XD and validate it
    //     $request->validate([
    //         'note' => ['required', 'string', 'max:1044'],
    //         'images' => ['required'],
    //     ]);
    //     // return $request->obada['name'];
    //     //store the  images from site
    //     // if (!$request->hasFile('images')) {
    //     //     return response()->json([
    //     //         'status' => 'fails',
    //     //         'code' => 200,
    //     //         'message' => 'upload file not found',
    //     //     ], 200);
    //     // } else {
    //     //     $allowedfileExtension = ['pdf', 'jpg', 'png'];
    //     //     $files = $request->file('images');
    //     //     $uploadedimages = [];
    //     //     foreach ($files as $file) {
    //     //         // return 'a';
    //     //         $extension = $file->getClientOriginalExtension();
    //     //         $check = in_array($extension, $allowedfileExtension);
    //     //         if ($check) {
    //     //             foreach ($files as $mediaFiles) {
    //     //                 $name = $mediaFiles->getClientOriginalName();
    //     //                 $path = $mediaFiles->storeAs('public/images', $name);
    //     //                 response()->json([
    //     //                     'status' => 'success',
    //     //                     'code' => 200,
    //     //                     'message' => 'images saved',
    //     //                 ], 200);
    //     //             }
    //     //         } else {
    //     //             return response()->json([
    //     //                 'status' => 'fails',
    //     //                 'code' => 200,
    //     //                 'message' => 'Invalid File Format',
    //     //             ], 200);
    //     //         }
    //     //         array_push($uploadedimages, $file->getClientOriginalName());
    //     //         response()->json([
    //     //             'status' => 'success',
    //     //             'code' => 200,
    //     //             'message' => 'images saved',
    //     //         ], 200);
    //     //     }
    //     // }
    //     //store the signtures
    //     // $uploadedsignture = [];
    //     // for ($i = 1; $i <= $request->signatureCount; $i++) {
    //     //     if (!$request->hasFile('signature' . $i)) {
    //     //         return response()->json([
    //     //             'status' => 'fails',
    //     //             'code' => 200,
    //     //             'message' => 'upload file not found',
    //     //         ], 200);
    //     //     } else {
    //     //         $allowedExtension = ['jpg', 'jpeg', 'png'];
    //     //         $file = $request->file('signature' . $i);
    //     //         // $erros = [];
    //     //         $extension = $file->getClientOriginalExtension();
    //     //         $check = in_array($extension, $allowedExtension);
    //     //         if ($check) {
    //     //             $name = time() . $file->getClientOriginalName();
    //     //             $path = $file->storeAs('public/images/signture/', $name);
    //     //             array_push($uploadedsignture, [
    //     //                 'key' => $request['signatureTitle' . $i],
    //     //                 'signName' => $request['signatureName' . $i],
    //     //                 'filename' => $name,
    //     //             ]);
    //     //             response()->json([
    //     //                 'status' => 'success',
    //     //                 'code' => 200,
    //     //                 'message' => 'images saved',
    //     //             ], 200);
    //     //         } else {
    //     //             return response()->json([
    //     //                 'status' => 'fails',
    //     //                 'code' => 200,
    //     //                 'message' => 'Invalid File Format',
    //     //             ], 200);
    //     //         }
    //     //     }
    //     // }
    //     // return json_decode($request->data)->firstForm;
    //     // foreach (json_encode($request->data) as $requestData) {
    //     $data = [
    //         'first_page' => json_decode($request->data)->firstForm,
    //         'note' => $request->note,
    //         'categories' => json_decode($request->data)->categories,
    //         // 'pictures' => $uploadedimages,
    //         // 'signutares' => $uploadedsignture,
    //         // 0 => $request->data[0],
    //     ];
    //     // }
    //     // return $data;
    //     //create the pdf
    //     // $info = session()->get('Quinfo' . session()->get('LoggedAccount')['email'], []);
    //     // $files = session()->get('files' . session()->get('LoggedAccount')['email'], []);
    //     // $request = session()->get('request' . session()->get('LoggedAccount')['email'], []);
    //     // $data = session()->get('data' . session()->get('LoggedAccount')['email'], []);
    //     // if (isset($data['data' . session()->get('LoggedAccount')['email']])) {
    //     //     session()->forget('data' . session()->get('LoggedAccount')['email']);
    //     //     $data['data' . session()->get('LoggedAccount')['email']] = [
    //     //         'info' => $info,
    //     //         'files' => $files,
    //     //         0 => $request
    //     //     ];
    //     // } else {
    //     //     $data['data' . session()->get('LoggedAccount')['email']] = [
    //     //         'info' => $info,
    //     //         'files' => $files,
    //     //         0 => $request
    //     //     ];
    //     // }
    //     // session()->put('data' . session()->get('LoggedAccount')['email'], $data);
    //     // return redirect()->route('Exportform');
    //     /////////////////////////////////////////
    //     ini_set('max_execution_time', '300');
    //     ini_set("pcre.backtrack_limit", "50000000");
    //     view()->share('data', $data);
    //     $pdf = PDF2::chunkLoadView('<html-separator/>', 'apiPDF', $data);
    //     // $pdf = PDF2::loadView('pdf', $data);
    //     $output = $pdf->output();
    //     $name = 'file' . $request->note . time() . rand(1111111111, 9999999999) . '.pdf';
    //     // storeAs($name, $output);
    //     Storage::put('pdf/' . $name, $pdf->output());
    //     // $document = Document::Create([
    //     // 'docNo' => session()->get('Quinfo' . session()->get('LoggedAccount')['email'], [])['Quinfo' . session()->get('LoggedAccount')['email']]['docNo'],
    //     // 'doc' => $name
    //     // ]);
    //     //TODO un comment the 3 line under this
    //     // session()->forget('Quinfo');
    //     // session()->forget('files');
    //     // download PDF file with download method
    //     // /upload/pdf/Doc.dsfaadfsaffadsewr.pdf
    //     return $file = 'https://www.c-rpt.com/storage/app/pdf' . '/' . $name;

    //     // $headers = array(
    //     //     'Content-Type: application/pdf',
    //     // );
    //     // //ssaap
    //     // return response()->download($file, 'filename.pdf', $headers);
    //     return $pdf->stream('Report.pdf');
    //     //store the pdf
    //     //return the pdf
    // }

    // public function getOnehandover($id)
    // {
    //     $handover = HandOver::find($id);
    //     if ($handover) {
    //         return response()->json([
    //             'status' => 'success',
    //             'code' => 200,
    //             'message' => 'Successfull Request',
    //             'data' => [
    //                 'handOver' => OneHandOver::collection([$handover])
    //             ],
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'status' => 'fails',
    //             'code' => 200,
    //             'message' => 'Data Not Found',
    //         ], 200);
    //     }
    // }

    // public function gethandover($perpage)
    // {
    //     $handovers = HandOver::paginate($perpage);
    //     if ($handovers) {
    //         return response()->json([
    //             'status' => 'success',
    //             'code' => 200,
    //             'message' => 'Successfull Request',
    //             'data' => [
    //                 'handOver' => ResourcesHandOver::collection($handovers)
    //             ],
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'status' => 'fails',
    //             'code' => 200,
    //             'message' => 'Data Not Found',
    //         ], 200);
    //     }
    // }

    // public function handover(Request $request)
    // {
    //     // return 'true';
    //     $request->validate([
    //         'note' => ['required', 'string', 'max:1024'],
    //         'name' => ['required', 'string', 'max:72'],
    //         'signture1' => ['required', 'mimes:png,jpg,jpeg'],
    //         'signture1Name' => ['required', 'string', 'max:72'],
    //         'signture2' => ['required', 'mimes:png,jpg,jpeg'],
    //         'signture2Name' => ['required', 'string', 'max:72'],
    //     ]);
    //     //;
    //     $lastDocNo = HandOver::all()->last()['Doc_No'];
    //     if ($lastDocNo) {
    //         $lastDocNo = $lastDocNo + 1;
    //     } else {
    //         $lastDocNo = 1;
    //     }
    //     $handOver = HandOver::Create([
    //         'note' => $request->note,
    //         'name' => $request->name,
    //         'signture1' => $request->signture1->getClientOriginalName(),
    //         'signture1Name' => $request->signture1Name,
    //         'signture2' => $request->signture2->getClientOriginalName(),
    //         'signture2Name' => $request->signture2Name,
    //         'Doc_No' => $lastDocNo,
    //     ]);
    //     if (!$request->hasFile('signture1')) {
    //         return response()->json([
    //             'status' => 'fails',
    //             'code' => 200,
    //             'message' => 'upload file not found',
    //         ], 200);
    //     } else {
    //         $allowedExtension = ['jpg', 'jpeg', 'png'];
    //         $file = $request->file('signture1');
    //         // $erros = [];
    //         $extension = $file->getClientOriginalExtension();
    //         $check = in_array($extension, $allowedExtension);
    //         if ($check) {
    //             $name = $file->getClientOriginalName();
    //             $path = $file->storeAs('public/images', $name);
    //             response()->json([
    //                 'status' => 'success',
    //                 'code' => 200,
    //                 'message' => 'images saved',
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 'fails',
    //                 'code' => 200,
    //                 'message' => 'Invalid File Format',
    //             ], 200);
    //         }
    //     }
    //     if (!$request->hasFile('signture2')) {
    //         return response()->json([
    //             'status' => 'fails',
    //             'code' => 200,
    //             'message' => 'upload file not found',
    //         ], 200);
    //     } else {
    //         $allowedExtension = ['jpg', 'jpeg', 'png'];
    //         $file = $request->file('signture2');
    //         // $erros = [];
    //         $extension = $file->getClientOriginalExtension();
    //         $check = in_array($extension, $allowedExtension);
    //         if ($check) {
    //             $name = $file->getClientOriginalName();
    //             $path = $file->storeAs('public/images', $name);
    //             response()->json([
    //                 'status' => 'success',
    //                 'code' => 200,
    //                 'message' => 'images saved',
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 'fails',
    //                 'code' => 200,
    //                 'message' => 'Invalid File Format',
    //             ], 200);
    //         }
    //     }
    //     return response()->json([
    //         'status' => 'success',
    //         'code' => 200,
    //         'message' => 'Successfull Request',
    //         'data' => [
    //             'handOver' => $handOver
    //         ],
    //     ], 200);
    // }

    public function inspection($id)
    {
        $request = [
            'id' => $id
        ];
        $validator = Validator::make($request, [
            'id' => ['required', 'integer', 'exists:new_templates,new_template_id']
        ]);
        if ($validator->fails()) {
            return $this->fails(200, 'an error occurred');
        }
        $template = NewTemplate::find($id);
        if ($template) {
            return $this->success(200, 'Successfull Request', 'data', [
                'Template' => StartInspectionResource::collection([$template]),
            ]);
        }
    }
    public function export(Request $request)
    {
        $request->validate([
            'template_id'=>['required', 'integer', 'exists:new_templates,new_template_id'],
        ]);
        $data=[
            'title'=>json_decode($request['Template'])->title,
            'desc'=>json_decode($request['Template'])->desc,
            'title_page'=>json_decode($request['Template'])->data->title_page,
            'pages'=>json_decode($request['Template'])->data->pages
        ];
        return $data;
        ini_set('max_execution_time', '300');
        ini_set("pcre.backtrack_limit", "50000000");
        view()->share('data', $data);
        $pdf = PDF2::loadView('pdf.new_7_11_2022.api_en_pdf', $data);
        // return $pdf->download('pdf_file.pdf');
        $output = $pdf->output();
        $name = 'file'. now() .'.pdf';
        //  storeAs($name, $output);
        Storage::put('pdf/' . $name, $pdf->output());

        return $file = 'https://www.c-rpt.com/storage/app/pdf' . '/' . $name;
        // $template = NewTemplate::find($request->template_id);
        // if ($template) {
        //     return $this->success(200, 'Successfull Request', 'data', [
        //         'Template' => StartInspectionResource::collection([$template]),
        //     ]);
        // }

    }

    public function homepage($perpage)
    {
        $template = NewTemplate::filter()->latest('new_template_id')->simplePaginate($perpage);
        if ($template) {
            return $this->success(200, 'Successfull Request', 'data', [
                'template' => TemplateResource::collection($template)->response()->getData(),
                'inProgess&complate' => TemplateResource::collection($template)->response()->getData(),
            ]);
        } else {
            return $this->fails(200, 'an error occurred');
        }
    }

    // public function NewTemplateTest()
    // {
    //     ini_set('max_execution_time', '300');
    //     ini_set("pcre.backtrack_limit", "50000000");
    //     // view()->share('data', $data);
    //     $pdf = PDF2::loadView('pdfTemplate2');
    //     // $pdf = PDF::loadView('pdf', $data);
    //     // download PDF file with download method
    //     $output = $pdf->output();
    //     // $name = 'upload/Doc.' .session()->get('info', [])['info']['docNo']. '.pdf';
    //     // file_put_contents($name, $output);
    //     // Document::Create([
    //     //     'docNo' => session()->get('info', [])['info']['docNo'],
    //     //     'doc' => $name
    //     // ]);
    //     // //TODO un comment the 3 line under this
    //     // session()->forget('cart');
    //     // session()->forget('info');
    //     // session()->forget('info2');
    //     return $pdf->download('pdf_file' . rand(111111111, 999999999) . '.pdf');
    // }
}
