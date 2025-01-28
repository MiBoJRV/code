import React from 'react';
import { CallToActionType } from 'src/types';
import { EmphasizedText, Text1 } from 'src/ui-kit';

export const EXPERT_STO_DATA: CallToActionType = {
  id: 'saas_audit',
  className: 'lg:max-w-[977px]',
  title: (
    <>
      Get an expert CTO to
      <EmphasizedText title=" lead your product development" />
    </>
  ),
  description: (
    <Text1
      fontSize="text-x2"
      fontSizeXs="xs:text-x2"
      fontSizeLg="lg:text-x1"
      className="mt-5 px-4 sm:w-auto"
      title="If you're interested in our CTO consulting services, share the details of your project and we'll get back to you with our next steps.
"
    />
  ),
  buttonText: 'Contact Us',
  buttonClassName: 'max-w-[178px] ',
};
