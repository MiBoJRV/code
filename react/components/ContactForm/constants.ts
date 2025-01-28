import { FormFieldType } from 'src/types';

export const FORM_FIELDS: FormFieldType[] = [
  {
    id: 'name',
    placeholder: 'Name',
    type: 'text',
    tag: 'input',
  },
  {
    id: 'email',
    placeholder: 'Email',
    type: 'email',
    tag: 'input',
  },
  {
    id: 'company',
    placeholder: 'Company',
    type: 'text',
    tag: 'input',
  },
  {
    id: 'message',
    placeholder: 'Message',
    type: 'textarea',
    tag: 'textarea',
  },
];
