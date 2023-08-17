# {{ cookiecutter.project_slug }}

{{ cookiecutter.project_description }}

## License
{% if cookiecutter.license_id == 'Unlicense' %}
This is free and unencumbered software released into the public domain,
see [UNLICENSE](./UNLICENSE)
{% else %}
Copyright (C) {{ cookiecutter.license_year }} {{ cookiecutter.license_fullname }}

{%- if cookiecutter.license_id == 'Apache-2.0' %}

Apache License, Version 2.0, see [LICENSE](./LICENSE).
{%- elif cookiecutter.license_id == 'BSD-3-Clause' %}

The BSD 3-Clause License, see [LICENSE](./LICENSE).
{%- elif cookiecutter.license_id == 'GPL-3.0' %}

The GNU General Public License (GPL) version 3, see [LICENSE](./LICENSE).
{%- elif cookiecutter.license_id == 'LGPL-3.0' %}

The GNU Lesser General Public License (GPL) version 3, see [LICENSE](./LICENSE).
{%- elif cookiecutter.license_id == 'MIT' %}

MIT License, see [LICENSE](./LICENSE).
{%- elif cookiecutter.license_id == 'MPL-2.0' %}

Mozilla Public License 2.0, see [LICENSE](./LICENSE).
{%- endif %}
{% endif %}
