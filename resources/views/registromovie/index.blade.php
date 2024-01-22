@extends('layouts.app')

@section('template_title')
    Registromovie
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registromovie') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registromovies.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Namemovie</th>
										<th>Fechamovies</th>
										<th>Country</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registromovies as $registromovie)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registromovie->NameMovie }}</td>
											<td>{{ $registromovie->FechaMovies }}</td>
											<td>{{ $registromovie->Country }}</td>

                                            <td>
                                                <form action="{{ route('registromovies.destroy',$registromovie->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registromovies.show',$registromovie->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registromovies.edit',$registromovie->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $registromovies->links() !!}
            </div>
        </div>
    </div>
@endsection
