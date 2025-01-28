import React from 'react';
import { CtoExpertiseFeatureType } from 'src/types';
import { Text1 } from 'src/ui-kit';
import { BracketBlockLeftIcon, BracketBlockRightIcon } from 'src/assets/icons';

export const CtoExpertiseListItem: React.FC<CtoExpertiseFeatureType> = ({
  text,
}): JSX.Element => (
  <li className="relative w-full h-[200px] mb-0 flex flex-col items-center justify-center px-[21px] xs:h-[148px] lg:w-[417px] lg:max-w-[417px] lg:h-[190px] lg:px-6">
    <BracketBlockLeftIcon className="w-[30px] h-full absolute -left-0 xs:w-[21px] lg:w-[27px]" />
    <Text1
      fontSize="text-box-text"
      fontSizeXs="xs:text-box-text"
      fontSizeLg="lg:text-h5"
      fontWeight="medium"
    >
      {text}
    </Text1>
    <BracketBlockRightIcon className="w-[30px] h-full absolute xs:w-[21px] -right-0 lg:w-[27px]" />
  </li>
);
