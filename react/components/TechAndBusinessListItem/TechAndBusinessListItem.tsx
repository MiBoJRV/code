import React from 'react';
import { OptionTechAndBusinessType } from 'src/types';
import { Heading5, Text4 } from 'src/ui-kit';

export const TechAndBusinessListItem: React.FC<OptionTechAndBusinessType> = ({
  title,
  icon,
  description,
}): JSX.Element => (
  <div className=" top-0 flex flex-col h-full py-4 px-7 lg:py-7 lg:px-10 ">
    <div className="w-11 h-11 mb-4 lg:h-12 lg:w-12 lg:mb-6">{icon}</div>
    <Heading5
      fontSize="text-title-box-sx"
      fontSizeLg="lg:text-title-box-lg"
      className="lg:whitespace-nowrap "
    >
      {title}
    </Heading5>
    <Text4
      className="mt-6 text-left"
      fontSize="text-x2-mob"
      fontSizeLg="lg:text-x2"
    >
      {description}
    </Text4>
  </div>
);
