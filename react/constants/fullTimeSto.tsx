import React from 'react';
import { CallToActionType } from 'src/types';
import { Text1 } from 'src/ui-kit';

export const FULL_TIME_STO_DATA: CallToActionType = {
  id: 'saas_audit',
  className: 'lg:max-w-[977px]',
  title: <>From full-time to a fractional CTO</>,
  description: (
    <Text1
      fontSize="text-x2"
      fontSizeXs="xs:text-x2"
      fontSizeLg="lg:text-x1"
      className="mt-5 px-4 sm:w-auto"
      title="We recommend starting with a full-time CTO who will set up all the necessary processes and then transitioning to a 20%-30% engagement to save on budget while still keeping your technology under control.
"
    />
  ),
  buttonText: 'Hire a CTO',
  buttonClassName: 'max-w-[174px] ',
};
