import os
from glob import glob

license_id = '{{ cookiecutter.license_id }}'

if license_id != 'Unlicense':
    os.rename('LICENSE.{{ cookiecutter.license_id }}', 'LICENSE')
    os.unlink('UNLICENSE')

for license_file in glob('LICENSE.*'):
    os.unlink(license_file)
