import React from 'react';
import { TechAndBusinessType } from 'src/types';
import { TechAndBusinessListItem } from 'src/components';
import {
  Heading2,
  PageSection,
  TechAndBusinessOptionBox,
  Text1,
} from 'src/ui-kit';

export const TechAndBusinessSection: React.FC<TechAndBusinessType> = ({
  title,
  description,
  options,
}): JSX.Element => (
  <PageSection className="flex flex-col items-center">
    <Heading2 className="mb-5 text-center lg:mb-5">{title}</Heading2>
    <Text1
      fontSize="text-x2-mob"
      fontSizeLg="lg:text-x1"
      className="max-w-[975px] px-3 mb-[62px] text-center lg:px-0 lg:mb-[52px]"
    >
      {description}
    </Text1>
    <ul className="grid grid-cols-1 gap-6 mx-auto md:flex md:flex-wrap lg:grid lg:grid-cols-2-1 lg:gap-y-8">
      {options.map((option) => (
        <TechAndBusinessOptionBox key={option.id}>
          <TechAndBusinessListItem {...option} />
        </TechAndBusinessOptionBox>
      ))}
    </ul>
  </PageSection>
);
