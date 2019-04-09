<?php

namespace App\Http\Controllers\Check;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use App\RegisterCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Jenssegers\Date\Date;
use Maatwebsite\Excel\Facades\Excel;

class RegisterCheckController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view("search.index", ['register_all' => RegisterCheck::all()]);
	}

	public function ajaxRegisterForm(RegisterFormRequest $request) {
		$true = RegisterCheck::create([
			'name' => $request->name,
			'last_name' => $request->last_name,
			'mother_last_name' => $request->mother_last_name,
			'email' => $request->email,
			'cellphone' => $request->cellphone,
			'created' => Date::now()->format('Y-m-d'),
		]);
		return response()->json($true);
	}

	public function downloadRegister(Request $request) {
		/*Query*/
		//$register=new RegisterCheck;

		$prt = explode("-", $request->daterange);
		$prt_change_a = str_replace("/", "-", $prt[0]);
		$prt_change_b = str_replace("/", "-", $prt[1]);

		$prt_change_as = new Date($prt_change_a);
		$prt_change_bs = new Date($prt_change_b);

		//  return   $prt_change_a . "   ".$prt_change_bs ;

		$register = DB::table('register_checks')
			->select('*');
		if ($prt_change_as->eq($prt_change_bs)) {
			$register->where('created', $prt_change_a);
		} else {
			$register->whereBetween('created', [$prt_change_a, $prt_change_b]);
		}
		$register_query = $register->get();

		if (count($register_query) == 0) {
			Session::flash('mensaje_info', 'No hemos encontrado datos de la fecha consultada');
			return redirect('admin/register');
		}

		//return $search_daily[0]->customers_link->name;
		/*Solucion al Excel*/
		ob_end_clean();
		ob_start();
		/*Solucion al Excel*/
		$time_format = Date::now()->format("Ymdhis");

		$title_excel = 'LLC_registros_' . $time_format;

		Excel::create($title_excel, function ($excel) use ($register_query) {

			// Set the title
			$excel->setTitle('Liga Contra el Cáncer');

			// Chain the setters
			$excel->setCreator('LCC')
				->setCompany('LCC');

			// Call them separately
			$excel->setDescription('La Liga Contra el Cáncer es la primera institución del Perú en realizar acciones de detección y prevención del cáncer.
                    ');

			$excel->sheet('Registros', function ($sheet) use ($register_query) {

				//$sheet->setSize('A1', 500, 50);
				$sheet->setFontFamily('Calibri');
				$sheet->setFontSize(10);
				$sheet->setWidth(array(
					'A' => 5, 'B' => 20, 'C' => 20, 'D' => 20, 'E' => 20, 'F' => 20,
				));
				/*Title*/
				$sheet->row(1, function ($row) {
					$row->setBackground('#000000');
					$row->setFontColor('#ffffff');
				});

				$sheet->row(1, array(
					'N°', 'Nombre', 'Apellidos', 'Correo', 'Teléfono', 'Registrado',
				));

				foreach ($register_query as $key => $value) {

					$sheet->appendRow(array(
						$key + 1,
						ucfirst(strtolower($value->name)),
						ucfirst(strtolower($value->last_name)) . ' ' . ucfirst(strtolower($value->mother_last_name)),
						$value->email,
						$value->cellphone,
						$value->created,
					));
				}

			});

		})->download('xlsx');
		Session::flash('mensaje_success', 'Sus datos fueron guardados correctametne');

	}

	public function ajaxRegister() {
		$register = RegisterCheck::all();
		$con = 1;
		return datatables($register)
			->addColumn('id', function ($val) use (&$con) {

				return $con++;
			})
			->addColumn('name', function ($val) {
				return ucfirst(strtolower($val->name));
			})
			->addColumn('last_name', function ($val) {
				return $val->FullLastName;
			})
			->make(true);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.


	 *
	 * @param  \App\RegisterCheck  $registerCheck
	 * @return \Illuminate\Http\Response
	 */
	public function show(RegisterCheck $registerCheck) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\RegisterCheck  $registerCheck
	 * @return \Illuminate\Http\Response
	 */
	public function edit(RegisterCheck $registerCheck) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\RegisterCheck  $registerCheck
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, RegisterCheck $registerCheck) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\RegisterCheck  $registerCheck
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(RegisterCheck $registerCheck) {
		//
	}
}
