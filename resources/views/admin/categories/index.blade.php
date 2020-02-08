@extends ('admin.layouts.app')

@section ('content')
	<div class="container">
		@component ('admin.categories.components.breadcrumb')
			@slot ('title') Список категорий @endslot
			@slot ('active') Категории @endslot
		@endcomponent

		<hr>

		<a href="{{ route('admin.category.create') }}"><i class="fa fa-plus-square-o"></i>Создать категорию</a>
		<table class="table table-striped">
			<thead>
				<th>Наименование</th>
				<th>Публикация</th>
				<th class="text-right">Действие</th>
			</thead>
			<tbody>
				@forelse ($categories as $category)
					<tr>
						<td>{{$category->title}}</td>
						<td>
							<a href="{{ route ('admin.category.edit', ['id'=>$category->id]) }}"><i class="fa fa-edit"></i></a>
						</td>

					</tr>
				@empty
					<tr>
						<td collspan="3" class="text-center">Данные отсутствуют</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
@endsection