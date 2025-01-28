import React from 'react';
import { CallToActionType } from 'src/types';
import { EmphasizedText, Text1 } from 'src/ui-kit';
import { ArrowDownIcon } from 'src/assets/icons/ArrowDownIcon';

export const BUILDING_SAAS_DATA: CallToActionType = {
  id: 'saas_develop',
  title: (
    <>
      Building SaaS requires
      <EmphasizedText title=" knowledge expertise " /> and a
      <EmphasizedText title=" strong team" />
    </>
  ),
  description: (
    <>
      <Text1
        fontSize="text-h5"
        fontSizeXs="xs:text-h5"
        fontSizeLg="lg:text-h4"
        fontWeight="medium"
        className="mt-3 px-[10px] lg:px-0 sm:w-auto lg:mt-4"
        title="At wetelo, you get this all."
      />
    </>
  ),
  icon: <ArrowDownIcon />,
  className: 'mt-14 lg:mt-24',
};
