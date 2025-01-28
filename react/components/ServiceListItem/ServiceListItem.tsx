import React from 'react';
import { Text1 } from 'src/ui-kit';
import { ServiceFeatureType } from 'src/types';
import { BracketLeftIcon, BracketRightIcon } from 'src/assets/icons';

export const ServiceListItem: React.FC<ServiceFeatureType> = ({
  icon,
  text,
}): JSX.Element => (
  <li className="relative w-full h-56 flex flex-col items-center justify-center px-7 mb-8 last:mb-0 xs:h-[142px] xs:px-4 xs:mb-0 lg:h-[156px] xl:px-9">
    <BracketLeftIcon strokeWidth="6" className="h-full absolute -left-[10px]" />
    <div className="mb-8 xs:mb-3 lg:absolute lg:-top-1/3">{icon}</div>
    <Text1 fontSize="text-x3-mob" fontWeight="medium" className="xs:text-x3">
      {text}
    </Text1>
    <BracketRightIcon
      strokeWidth="6"
      className="h-full absolute -right-[10px]"
    />
  </li>
);
