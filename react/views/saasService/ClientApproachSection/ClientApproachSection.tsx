import React from 'react';
import { ApproachBox, Heading2, PageSection, Text1 } from 'src/ui-kit';
import { ApproachCard } from 'src/components';
import { ClientApproachType } from 'src/types';

export const ClientApproachSection: React.FC<ClientApproachType> = ({
  title,
  description,
  approaches,
}): JSX.Element => (
  <PageSection>
    <div className="flex flex-col justify-center mx-auto text-center max-w-full lg:max-w-[1085px]">
      <Heading2>{title}</Heading2>
      <Text1
        fontSize="text-x2-mob"
        className="mt-8 max-w-[549px] mx-auto xs:px-4 sm:w-auto lg:mt-10 "
      >
        {description}
      </Text1>
    </div>
    <ul className="gap-5 mx-auto mt-9  lg:mt-8  flex justify-center flex-wrap xl:justify-between  xl:flex-nowrap">
      {approaches.map((approach) => (
        <ApproachBox
          key={approach.id}
          className="text-center justify-self-center xs:odd:justify-self-end xs:even:justify-self-start"
        >
          <ApproachCard {...approach} />
        </ApproachBox>
      ))}
    </ul>
  </PageSection>
);
