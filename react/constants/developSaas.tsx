import React from 'react';
import { CallToActionType } from 'src/types';
import { EmphasizedText, Text1 } from 'src/ui-kit';

export const SAAS_DEVELOP_DATA: CallToActionType = {
  id: 'saas_develop',
  className: 'lg:max-w-[867px]',
  title: (
    <>
      <EmphasizedText title="Develop " />
      your SaaS product
      <EmphasizedText title=" with Wetelo" />
    </>
  ),
  description: (
    <>
      <Text1
        fontSize="text-x2-mob"
        fontSizeXs="xs:text-x2-mob"
        fontSizeLg="lg:text-x1"
        className="mt-8 px-[10px] lg:px-0 sm:w-auto lg:mt-10"
        title="Need a reliable SaaS development company to build your project?"
      />
      <Text1
        fontSize="text-x2-mob"
        fontSizeXs="xs:text-x2-mob"
        fontSizeLg="lg:text-x1"
        className="px-7 lg:px-0 sm:w-auto"
        title="Contact us and let's discuss how we can help."
      />
    </>
  ),
  buttonText: 'Contact Us',
  buttonClassName: 'max-w-[190px] w-full justify-center lg:max-w-[178px] ',
};
