import React from 'react';
import { ProductLifecycleFeatureType } from 'src/types';
import { Text1 } from 'src/ui-kit';
import { BracketBoxLeftIcon, BracketBoxRightIcon } from 'src/assets/icons';

export const ProductLifecycleListItem: React.FC<
  ProductLifecycleFeatureType
> = ({ text }): JSX.Element => (
  <li className="relative w-[48%] mb-0 flex flex-col items-center justify-center px-4 h-[72px] xs:w-[180px] lg:w-full lg:max-w-[307px] lg:h-[122px] xl:px-9">
    <BracketBoxLeftIcon className=" w-4 h-full absolute -left-0 lg:w-[27px]" />
    <Text1
      fontSize="text-h5-mob"
      fontSizeXs="xs:text-x2"
      fontSizeLg="text-h5-mob"
      fontWeight="medium"
    >
      {text}
    </Text1>
    <BracketBoxRightIcon className="w-4 h-full absolute -right-0 lg:w-[27px]" />
  </li>
);
