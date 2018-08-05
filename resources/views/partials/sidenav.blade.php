
<div class="col-md-3">
    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
        <ul class="nav">
            @foreach ($sections as $section)
                <li><a href="#section_{{$section->id}}">{{$section->name}}</a></li>
            @endforeach
            {{-- <li><a href="#line1">Getting Started</a></li>
            <li><a href="#line2">How to Install WordPress</a></li>
            <li><a href="#line3">How to Install Theme</a></li>
            <li><a href="#line4">Necessary Plugins</a></li>
            <li><a href="#line5">Creating Blog Pages</a></li>
            <li><a href="#line6">Revolution Slider</a></li>
            <li><a href="#line7">How to Use Option Panel</a>
                <ul class="nav">
                    <li><a href="#line7_1">General Options</a></li>
                    <li><a href="#line7_2">Style Options</a></li>
                    <li><a href="#line7_3">Header Options</a></li>
                    <li><a href="#line7_4">Font Options</a></li>
                    <li><a href="#line7_5">Slider Options</a></li>
                    <li><a href="#line7_6">Page Options</a></li>
                    <li><a href="#line7_7">Import & Export</a></li>
                </ul>
            </li>
            <li><a href="#line8">Support Desk</a></li>
            <li><a href="#line9">Files & Sources</a></li>
            <li><a href="#line10">Version History (Changelog)</a></li>
            <li><a href="#line11">Copyright and license</a></li> --}}
        </ul>
    </nav >
</div>