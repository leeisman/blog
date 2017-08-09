<!-- /.box-body -->
<div class="box-footer clearfix">

    <ul class="pagination pagination-sm no-margin pull-right">
        <li class=" {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1).$searchesStr }}">上一頁<i class="chevron left icon"></i></a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $paginator->url($i).$searchesStr }}">{{ $i }}</a>
            </li>
        @endfor
        <li class=" {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1.).$searchesStr }}">
                <i class="chevron right icon">下一頁</i>
            </a>
        </li>
    </ul>

</div>