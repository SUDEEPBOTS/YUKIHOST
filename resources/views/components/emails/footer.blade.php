{{ Illuminate\Mail\Markdown::parse('---') }}

Thank you,<br>
{{ config('app.name') ?? 'YUKIHOST' }}

{{ Illuminate\Mail\Markdown::parse('[Contact Support](https://yukiapi.site/docs/contact)') }}
