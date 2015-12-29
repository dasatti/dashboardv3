@extends('layout.app')

@section('content')

<ol class="breadcrumb bc-3">
	<li>
		<a href="#">
			<i class="entypo-home"></i>
			Dashboard
		</a>
	</li>
	<li><a href="#">Manage GSM Numbers</a></li>
</ol>

<h1>Manage GSM Numbers</h1>



<table class="table table-bordered datatable" id="table-3">
			<thead>
				<tr class="replace-inputs">
					<th>Rendering engine</th>
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					<td>Trident</td>
					<td>Internet Explorer 4.0</td>
					<td>Win 95+</td>
					<td class="center">4</td>
					<td class="center">X</td>
				</tr>
				<tr class="even gradeC">
					<td>Trident</td>
					<td>Internet Explorer 5.0</td>
					<td>Win 95+</td>
					<td class="center">5</td>
					<td class="center">C</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 5.5</td>
					<td>Win 95+</td>
					<td class="center">5.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>Internet Explorer 6</td>
					<td>Win 98+</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 7</td>
					<td>Win XP SP2+</td>
					<td class="center">7</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>AOL browser (AOL desktop)</td>
					<td>Win XP</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.5</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 2.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 3.0</td>
					<td>Win 2k+ / OSX.3+</td>
					<td class="center">1.9</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.0</td>
					<td>OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.5</td>
					<td>OSX.3+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				
				<tr class="gradeA">
					<td>Webkit</td>
					<td>S60</td>
					<td>S60</td>
					<td class="center">413</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.0</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.0</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.0</td>
					<td>Win 95+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.2</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.5</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera for Wii</td>
					<td>Wii</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nokia N800</td>
					<td>N800</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nintendo DS browser</td>
					<td>Nintendo DS</td>
					<td class="center">8.5</td>
					<td class="center">C/A<sup>1</sup>
					</td>
				</tr>
				<tr class="gradeC">
					<td>KHTML</td>
					<td>Konqureror 3.1</td>
					<td>KDE 3.1</td>
					<td class="center">3.1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.3</td>
					<td>KDE 3.3</td>
					<td class="center">3.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.5</td>
					<td>KDE 3.5</td>
					<td class="center">3.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeX">
					<td>Tasman</td>
					<td>Internet Explorer 4.5</td>
					<td>Mac OS 8-9</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				
			</tbody>
			<tfoot>
				<tr>
					<th>Rendering engine</th>
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
				</tr>
			</tfoot>
		</table>




	<script src="{{ URL::asset('public/assets/js/datatables/datatables.js') }}"></script>

@stop