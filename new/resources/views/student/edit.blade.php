	@extends('layout.app')

	@section('title', 'Student')

	@section('head-script')
	<style type="text/css">
		body {
			padding: 20px 100px;
		}
		td, th {
			padding: 5px;
		}
	</style>
	@endsection


	@section('content')

	<form method="post" action="/students/update/{{$student->id}}">
		@csrf
		@method('PUT')

		<label>
			guardian id
			<input type="text" name="guardian_id" value="{{$student->guardian_id}}">
		</label>
		<br><br>

		<label>
			name
			<input type="text" name="name" value="{{$student->name}}">
		</label>
		<br><br>

		<label>
			nis
			<input type="text" name="nis" value="{{$student->nis}}">
		</label>
		<br><br>

		<label>
			gender
			<label>
				<input type="radio" name="gender" value="l" {{$student->gender == 'l' ? 'checked' : ''}}>
				Laki-laki
			</label>
			<label>
				<input type="radio" name="gender" value="p" {{$student->gender == 'p' ? 'checked' : ''}}>
				Perempuan
			</label>
		</label>
		<br><br>

		<label>
			birth date
			<input type="date" name="birth_date" value="{{$student->birth_date}}">
		</label>
		<br><br>

		<label>
			address
			<textarea name="address">{{$student->address}}</textarea>
		</label>
		<br><br>

		<label>
			class
			<select name="class">
				<option value="10" {{$student->class == 10 ? 'selected' : ''}}>Kelas 10</option>
				<option value="11" {{$student->class == 11 ? 'selected' : ''}}>Kelas 11</option>
				<option value="12" {{$student->class == 12 ? 'selected' : ''}}>Kelas 12</option>
			</select>
		</label>
		<br><br>

		<label>
			majors
			<select name="majors" value="{{$student->majors}}">
				<option value="IPA" {{ $student->majors == "IPA" ? 'selected' : ''}}>IPA</option>
				<option value="IPS" {{ $student->majors == "IPS" ? 'selected' : ''}}>IPS</option>
				<option value="AGAMA" {{ $student->majors == "AGAMA" ? 'selected' : ''}}>AGAMA</option>
				<option value="BAHASA" {{ $student->majors == "BAHASA" ? 'selected' : ''}}>BAHASA</option>
			</select>
		</label>
		<br><br>

		<label>
			height
			<input type="number" name="height" value="{{$student->height}}">
		</label>
		<br><br>

		<label>
			weight
			<input type="number" name="weight" value="{{$student->weight}}">
		</label>
		<br><br>

		<button>Create</button>
	</form>
	@endsection