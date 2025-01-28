import React from 'react';
import { OptionType } from 'src/types';
import { Heading2, Text4 } from 'src/ui-kit';

export const CtoOptionListItem: React.FC<OptionType> = ({
  title,
  description,
}): JSX.Element => (
  <div className="absolute top-0 flex flex-col justify-start items-center h-full py-4 px-[30px] lg:py-5">
    <Heading2 className="!text-blue-warm self-start" fontSize="text-h2">
      {title}
    </Heading2>
    <Text4
      className="mt-1.5"
      fontSize="text-box-text"
      fontSizeLg="lg:text-box-text"
    >
      {description}
    </Text4>
  </div>
);
