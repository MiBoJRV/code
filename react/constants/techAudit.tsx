import React from 'react';
import { CallToActionType } from 'src/types';
import { EmphasizedText, Text1 } from 'src/ui-kit';

export const SAAS_AUDIT_DATA: CallToActionType = {
  id: 'saas_audit',
  className: 'lg:max-w-[977px]',
  title: (
    <>
      <EmphasizedText title="Start " />
      your project with a
      <EmphasizedText title=" tech audit" />
    </>
  ),

  description: (
    <Text1
      fontSize="text-x2-mob"
      fontSizeXs="xs:text-x2-mob"
      fontSizeLg="lg:text-x1"
      className="mt-8 px-4 sm:w-auto lg:mt-10"
      title="Before we dive into a big project, let's get to know each other. We'll assess your current system to identify potential risks and provide recommendations on how to mitigate them. It's up to you whether your team or ours makes fixes."
    />
  ),
  buttonText: 'Order a tech audit',
  buttonClassName: 'max-w-[247px] ',
};
