import React from 'react';
import { CallToActionType } from 'src/types';
import { Button, EmphasizedText, Text1 } from 'src/ui-kit';
import { ArrowIcon } from 'src/assets/icons/ArrowIcon';

export const HELP_CHALLENGES_DATA: CallToActionType = {
  id: 'saas_develop',
  title: <>Recognize yourself in the situations above?</>,
  description: (
    <>
      <Text1
        fontSize="text-h5"
        fontSizeXs="xs:text-h5"
        fontSizeLg="lg:text-h4"
        fontWeight="medium"
        className="mt-3 px-[10px] lg:px-0 sm:w-auto lg:mt-4"
      >
        We can help you
        <EmphasizedText title=" address " />
        these
        <EmphasizedText title=" challenges" />
      </Text1>
    </>
  ),
  button: (
    <Button
      btnKind="lg"
      title="Contact Us"
      icon={<ArrowIcon />}
      iconPosition="right"
      className="max-w-[190px] w-full justify-center lg:max-w-[178px]"
    />
  ),
  className: 'mt-14 lg:mt-16',
};
