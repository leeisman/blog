@if ($type === 'features')
    <td class='hidden-480'>
        <a href="{{ URL::to($action. $id.'/edit') }}"
           class="btn" rel="tooltip" title="" data-original-title="Edit">
            <i class="fa fa-fw fa-edit"></i></a>
        <a href="{{ URL::to($action.'delete/' . $id) }}"
           class="btn" rel="tooltip" title="" data-original-title="Delete"
           onclick="return confirm('確定刪除嗎?')">
            <i class="fa fa-fw fa-remove"></i></a>
    </td>
@endif

@if ($type === 'searchTitle')
    @foreach($title as $key=>$value)
        <th>
            {{ Form::text($key, Input::get($key),
            array('class' => 'form-control',
            'onkeydown'=>'if (event.keyCode == 13) this.form.submit();'))
             }}
            {{$value}}
        </th>
    @endforeach
@endif
